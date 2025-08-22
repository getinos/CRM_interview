<div class="modal-overlay" id="addProjectModal">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Add New Project</h2>
                <button class="close-btn" onclick="closeModal('addProjectModal')">&times;</button>
            </div>
            <form action="{{ route('addProject') }}" method="POST" class="form-group" style="margin-top:1rem;">
    @csrf
    <div class="form-group">
        <label class="form-label">Name</label>
        <input type="text" class="form-input" name="name" required>
    </div>
    <div class="form-group">
        <label class="form-label">Phone</label>
        <input type="tel" class="form-input" name="phone" required>
    </div>
    <div class="form-group">
        <label class="form-label">Email</label>
        <input type="email" class="form-input" name="email" required>
    </div>
    <div class="form-group">
        <label class="form-label">Stage</label>
        <select class="form-select" name="stage_id" required>
            @foreach($stages as $stage)
                <option value="{{ $stage->id }}">{{ $stage->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-actions">
        <button type="button" class="btn btn-secondary" onclick="closeModal('addProjectModal')">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Project</button>
    </div>
</form>

        </div>
    </div>