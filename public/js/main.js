let draggedElement = null;

// Drag and Drop Functions
function dragStart(e) {
    draggedElement = e.target;
    e.target.classList.add('dragging');
}

function allowDrop(e) {
    e.preventDefault();
    e.currentTarget.classList.add('drag-over');
}

function dragLeave(e) {
    e.currentTarget.classList.remove('drag-over');
}

function drop(e) {
    e.preventDefault();
    e.currentTarget.classList.remove('drag-over');
    
    if (draggedElement) {
        const projectId = draggedElement.dataset.id;
        const newStage = e.currentTarget.dataset.stage;

        console.log(`Moving project ${projectId} to stage ${newStage}`);
        
        // 👇 Append the dragged card into the new stage column
        e.currentTarget.appendChild(draggedElement);

        // TODO: Send AJAX request to update project stage in DB
        // updateProjectStage(projectId, newStage);

        draggedElement.classList.remove('dragging');
        draggedElement = null;
    }
}


// Modal Functions
function openAddProject() {
    document.getElementById('addProjectModal').classList.add('active');
}

function openStageSettings() {
    document.getElementById('stageSettingsModal').classList.add('active');
}

function closeModal(modalId) {
    document.getElementById(modalId).classList.remove('active');
    // Reset forms
    if (modalId === 'addProjectModal') {
        document.getElementById('projectName').value = '';
        document.getElementById('projectPhone').value = '';
        document.getElementById('projectEmail').value = '';
        document.getElementById('projectStage').value = '';
    }
    if (modalId === 'stageSettingsModal') {
        document.getElementById('newStageName').value = '';
    }
}

// Add Project Form Handler
function addProject(e) {
 
    
    // You can add your database insert logic here:
    // insertProject(formData);
    
    closeModal('addProjectModal');
}

// Add Stage Function
function addStage() {
    const stageName = document.getElementById('newStageName').value.trim();
    if (!stageName) return;
    
    // TODO: Send AJAX request to add stage to database
    console.log('Adding stage:', stageName);
    
    // You can add your database insert logic here:
    // insertStage(stageName);
    
    document.getElementById('newStageName').value = '';
}

// Remove Stage Function
function removeStage(stageId) {
    // TODO: Send AJAX request to remove stage from database
    console.log('Removing stage:', stageId);
    
    // You can add your database delete logic here:
    // deleteStage(stageId);
}

// Close modal on outside click
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('modal-overlay')) {
        e.target.classList.remove('active');
    }
});

// Utility function to update column expansion based on card count
function updateColumnExpansion() {
    document.querySelectorAll('.kanban-column').forEach(column => {
        const cardCount = column.querySelectorAll('.project-card').length;
        if (cardCount > 3) {
            column.classList.add('expanded');
        } else {
            column.classList.remove('expanded');
        }
    });
}

// Call this function after loading data from database
document.addEventListener('DOMContentLoaded', function() {
    updateColumnExpansion();
});
