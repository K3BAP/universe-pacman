// Fetch Bracket Data
fetch(`/turniere/bracket/${tournamentId}`)
    .then(response => response.json())
    .then(bracket => {
        // Render the bracket data
        console.log(bracket);
        // Example: Dynamically create HTML for the bracket
        bracket.forEach(match => {
            const matchElement = document.createElement('div');
            matchElement.textContent = `Match: ${match.participant1_id} vs ${match.participant2_id || 'Bye'}`;
            document.getElementById('bracket-container').appendChild(matchElement);
        });
    });

// Update Match Result
function updateMatchResult(matchId, winnerId, loserId) {
    fetch(`/turniere/match`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ matchId, winnerId, loserId }),
    })
        .then(response => response.json())
        .then(data => {
            console.log('Match updated:', data);
        });
}