<div class="kanban-board" id="kanbanBoard">
    @foreach($stages as $stage)
        <div class="kanban-column stage-{{ strtolower($stage->name) }}">
            <div class="column-header">
                <div class="column-title">{{ $stage->name }}</div>
                <div class="column-badge">{{ $stage->projects->count() }}</div>
            </div>

            <div class="column-content" 
                 data-stage="{{ $stage->id }}" 
                 ondrop="drop(event)" 
                 ondragover="allowDrop(event)" 
                 ondragleave="dragLeave(event)">

                @foreach($stage->projects as $project)
                    <div class="project-card" draggable="true" 
                         data-id="{{ $project->id }}" 
                         ondragstart="dragStart(event)">
                        <div class="project-name">{{ $project->name }}</div>
                        <div class="project-info"><strong>Phone:</strong> {{ $project->phone }}</div>
                        <div class="project-info"><strong>Email:</strong> {{ $project->email }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    @endforeach
</div>
