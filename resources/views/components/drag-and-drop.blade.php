@props([
    'question' => 'Arrange the following items correctly',
    'items' => [],
    'correctOrder' => [],
])

<div class="sort-question w-full   mx-auto text-foreground">
    <p class="text-sm text-muted-foreground mb-6">Drag and drop items into their rightful place.</p>
    @php
        $choices = [
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
        ];
    @endphp
    <ul id="sortable-list" class="space-y-3">
        @foreach ($items as $key => $item)
            @if ($item)
                <li id="item_{{ $key }}"
                    class="sortable-item group flex items-center p-4 bg-background border-2 border-border rounded-lg cursor-grab active:cursor-grabbing transition-all duration-200 hover:border-primary/50 hover:shadow-md"
                    draggable="true" data-value="{{ $choices[$key]  }}" ondragstart="dragStart(event)"
                    ondragover="dragOver(event)" ondragleave="dragLeave(event)" ondrop="drop(event)">

                    <div
                        class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-muted text-primary font-bold text-sm mr-4 group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        {{ $choices[$key] }}
                    </div>

                    <span class="flex-grow font-medium">{{ $item }}</span>

                    <div class="text-muted-foreground opacity-40 group-hover:opacity-100 transition-opacity">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="9" cy="5" r="1" />
                            <circle cx="9" cy="12" r="1" />
                            <circle cx="9" cy="19" r="1" />
                            <circle cx="15" cy="5" r="1" />
                            <circle cx="15" cy="12" r="1" />
                            <circle cx="15" cy="19" r="1" />
                        </svg>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>

    {{-- <div class="mt-8 pt-6 border-t border-border flex flex-col items-center gap-4">
        <button onclick="checkOrder()"
            class="w-full py-3 px-6 bg-primary text-primary-foreground font-bold rounded-lg hover:opacity-90 active:scale-[0.98] transition-all shadow-lg shadow-primary/20">
            Submit Answer
        </button>
        <p id="result" class="text-sm font-bold min-h-[1.25rem]"></p>
    </div>

    <input type="hidden" id="correct-order" value="{{ implode(',', $correctOrder) }}"> --}}
</div>

<style>
    /* Handled via Tailwind but needs specific drag states */
    .sortable-item.dragging {
        opacity: 0.2;
        transform: scale(0.95);
        border-style: dashed !important;
        border-color: theme('colors.primary') !important;
    }

    .drag-over-top {
        border-top-color: theme('colors.secondary') !important;
        border-top-width: 4px !important;
    }

    .drag-over-bottom {
        border-bottom-color: theme('colors.secondary') !important;
        border-bottom-width: 4px !important;
    }
</style>


