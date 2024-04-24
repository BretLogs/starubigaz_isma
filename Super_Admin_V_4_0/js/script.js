document.addEventListener('DOMContentLoaded', function () {
    // Archive button 1
    const archiveButton1 = document.getElementById('archive-confirm-btn');

    archiveButton1.addEventListener('click', function () {
        const branchId = this.dataset.id;

        // Send branchId to the PHP script via AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'php/branch_information/branch_archived.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                
                alert("Branch Archived successfully.");
                window.location.href = "/branches.php";   
                console.log("success");         }
        };
        xhr.send(`branch_id=${branchId}`);
    });

    
});



