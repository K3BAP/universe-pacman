<?php

namespace App\Controllers;

use App\Models\TournamentsModel;
use App\Models\TournamentParticipantsModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use ReflectionException;

class Turniere extends BaseController
{
    public function getIndex(): string
    {
        $tournamentsModel = new TournamentsModel();
        $tournaments = $tournamentsModel->findAll();

        $data = [
            'title' => 'Turniere',
            'tournaments' => $tournaments,
        ];
        return view('pages/TurniereView', $data);
    }

    public function getCreate(): string
    {
        $data = [
            'title' => 'Turnier erstellen',
        ];
        return view('pages/TurnierCreateView', $data);
    }

    /**
     * @throws ReflectionException
     */
    public function postCreate()
    {
        $tournamentsModel = new TournamentsModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
            'created_by' => $_COOKIE['userid'],
        ];

        $tournamentsModel->insert($data);
        return redirect()->to('/turniere');
    }

    public function getJoin($tournamentId)
    {
        $participantsModel = new TournamentParticipantsModel();

        // Check if the user has already joined the tournament
        $existingEntry = $participantsModel->where('tournament_id', $tournamentId)
            ->where('user_id', $_COOKIE['userid'])
            ->first();

        if ($existingEntry) {
            // Redirect or handle the case where the user has already joined
            return redirect()->to('/turniere')->with('error', 'You have already joined this tournament.');
        }

        // Proceed to join the tournament
        $data = [
            'tournament_id' => $tournamentId,
            'user_id' => $_COOKIE['userid'],
        ];

        $participantsModel->insert($data);
        return redirect()->to('/turniere');
    }

    /**
     * @throws ReflectionException
     */
    public function startCompetition($tournamentId)
    {
        $tournamentsModel = new TournamentsModel();
        $participantsModel = new TournamentParticipantsModel();

        // Check permission level
        if (!isset($_COOKIE['permissionLevel']) || $_COOKIE['permissionLevel'] <= 1) {
            return redirect()->to('/turniere')->with('error', 'You do not have permission to start the competition phase.');
        }

        // Fetch tournament and participants
        $tournament = $tournamentsModel->find($tournamentId);
        if (!$tournament || $tournament['phase'] !== 'registration') {
            return redirect()->to('/turniere')->with('error', 'Tournament is not in the registration phase.');
        }

        $participants = $participantsModel->where('tournament_id', $tournamentId)->findAll();
        if (count($participants) < 2) {
            return redirect()->to('/turniere')->with('error', 'Not enough participants to start the competition.');
        }

        // Generate brackets (Double Elimination logic placeholder)
        $this->generateDoubleEliminationBrackets($participants);

        // Update tournament phase
        $tournamentsModel->update($tournamentId, ['phase' => 'competition']);
        return redirect()->to('/turniere')->with('success', 'Competition phase started.');
    }

    public function concludeTournament($tournamentId)
    {
        $tournamentsModel = new TournamentsModel();

        // Check permission level
        if (!isset($_COOKIE['permissionLevel']) || $_COOKIE['permissionLevel'] <= 1) {
            return redirect()->to('/turniere')->with('error', 'You do not have permission to conclude the tournament.');
        }

        // Fetch tournament
        $tournament = $tournamentsModel->find($tournamentId);
        if (!$tournament || $tournament['phase'] !== 'competition') {
            return redirect()->to('/turniere')->with('error', 'Tournament is not in the competition phase.');
        }

        // Update tournament phase
        $tournamentsModel->update($tournamentId, ['phase' => 'conclusion']);
        return redirect()->to('/turniere')->with('success', 'Tournament concluded.');
    }

    private function generateDoubleEliminationBrackets($participants)
    {
        // Placeholder for bracket generation logic
        // Implement the double elimination algorithm here
    }
}
