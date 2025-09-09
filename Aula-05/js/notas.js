function addLinhaTotalizadora() {
    const table = document.getElementById('grades');
    const tbody = table.getElementsByTagName('tbody')[0];
    const rows = tbody.getElementsByTagName('tr');
    const numCols = table.rows[0].cells.length;

    // Check if row exists
    if (tbody.lastElementChild.id === 'rowTotal') {
        return;
    }

    // Create row
    const totalRow = document.createElement('tr');
    totalRow.id = 'rowTotal';
    const totalCell = document.createElement('td');
    totalCell.textContent = 'Média';
    totalRow.appendChild(totalCell);

    // Calculate the avarage for the column
    for (let col = 1; col < numCols; col++) {
        let sum = 0;
        let count = 0;
        for (let row = 0; row < rows.length; row++) {
            const cellValue = parseFloat(rows[row].cells[col].textContent);
            if (!isNaN(cellValue)) {
                sum += cellValue;
                count++;
            }
        }
        const avg = count > 0 ? (sum / count).toFixed(2) : '-';
        const cell = document.createElement('td');
        cell.textContent = avg;
        totalRow.appendChild(cell);
    }

    tbody.appendChild(totalRow);
}

function addColunaTotalizadora() {
    const table = document.getElementById('grades');
    const rows = table.getElementsByTagName('tr');

    // Check if column exists
    if (table.rows[0].cells[table.rows[0].cells.length - 1].textContent === 'Média') {
        return;
    }

    // Create header on the first row
    const headerRow1 = table.rows[0];
    const headerCell1 = document.createElement('th');
    headerCell1.textContent = 'Média';
    headerRow1.appendChild(headerCell1);

    // Add empty cell to second row
    const headerRow2 = table.rows[1];
    const headerCell2 = document.createElement('th');
    headerRow2.appendChild(headerCell2);

    // Calculate grade avarage for each student
    for (let i = 2; i < rows.length; i++) {
        const row = rows[i];
        let sum = 0;
        let count = 0;
        for (let j = 1; j < row.cells.length; j++) {
            const cellValue = parseFloat(row.cells[j].textContent);
            if (!isNaN(cellValue)) {
                sum += cellValue;
                count++;
            }
        }
        const avg = count > 0 ? (sum / count).toFixed(2) : '-';
        const cell = document.createElement('td');
        cell.textContent = avg;
        row.appendChild(cell);
    }
}