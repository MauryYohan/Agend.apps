<h1>Ajouter un RDV</h1>

<form method="post">
    <label for="title"> Titre
        <input type="text" id="title" name="title" placeholder="Titre" required>
    </label>
    <label for="details"> Détails
        <input type="text" id="details" name="details" placeholder="Détails" required />
    </label>
    <div class="grid">
        <label for="date"> Date du RDV
            <input type="date" id="date" name="date" required>
        </label>
        <label for="important">
            <input type="checkbox" id="important" name="important">
            Important ?
        </label>
    </div>
    <button type="submit">Ajouter</button>
</form>