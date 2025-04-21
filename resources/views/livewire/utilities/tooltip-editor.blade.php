<div>
    <!-- Styles for the editor -->
    <style>
        .ProseMirror:focus {
            outline: none;
        }

        .tiptap ul p,
        .tiptap ol p {
            display: inline;
        }

        .tiptap p.is-editor-empty:first-child::before {
            content: attr(data-placeholder);
            float: left;
            height: 0;
            pointer-events: none;
        }
    </style>

    <div wire:ignore>
        <div
            class="bg-white border border-gray-200 rounded-xl overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
            <div id="{{ $editorId }}-tiptap">
                <div
                    class="sticky top-0 bg-white flex align-middle gap-x-0.5 border-b border-gray-200 p-2 dark:bg-neutral-900 dark:border-neutral-700">
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-bold>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 12a4 4 0 0 0 0-8H6v8"></path>
                            <path d="M15 20a4 4 0 0 0 0-8H6v8Z"></path>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-italic>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="19" x2="10" y1="4" y2="4"></line>
                            <line x1="14" x2="5" y1="20" y2="20"></line>
                            <line x1="15" x2="9" y1="4" y2="20"></line>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-underline>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 4v6a6 6 0 0 0 12 0V4"></path>
                            <line x1="4" x2="20" y1="20" y2="20"></line>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-strike>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4H9a3 3 0 0 0-2.83 4"></path>
                            <path d="M14 12a4 4 0 0 1 0 8H6"></path>
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-link>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-ol>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="10" x2="21" y1="6" y2="6"></line>
                            <line x1="10" x2="21" y1="12" y2="12"></line>
                            <line x1="10" x2="21" y1="18" y2="18"></line>
                            <path d="M4 6h1v4"></path>
                            <path d="M4 10h2"></path>
                            <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"></path>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-ul>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="8" x2="21" y1="6" y2="6"></line>
                            <line x1="8" x2="21" y1="12" y2="12"></line>
                            <line x1="8" x2="21" y1="18" y2="18"></line>
                            <line x1="3" x2="3.01" y1="6" y2="6"></line>
                            <line x1="3" x2="3.01" y1="12" y2="12"></line>
                            <line x1="3" x2="3.01" y1="18" y2="18"></line>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-blockquote>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 6H3"></path>
                            <path d="M21 12H8"></path>
                            <path d="M21 18H8"></path>
                            <path d="M3 12v6"></path>
                        </svg>
                    </button>
                    <button
                        class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        type="button" data-hs-editor-code>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m18 16 4-4-4-4"></path>
                            <path d="m6 8-4 4 4 4"></path>
                            <path d="m14.5 4-5 16"></path>
                        </svg>
                    </button>
                </div>

                <div class="h-[55vh] overflow-auto" data-hs-editor-field></div>
            </div>
        </div>

        <input type="hidden" id="editor-content-{{ $editorId }}" wire:model="content" />
    </div>

    <script>
        document.addEventListener('livewire:initialized', function() {
            initEditor('{{ $editorId }}');
        });

        function initEditor(editorId) {
            const editorSelector = `#${editorId}-tiptap`;
            const editorField = document.querySelector(`${editorSelector} [data-hs-editor-field]`);
            const contentInput = document.getElementById(`editor-content-${editorId}`);

            if (!editorField || !contentInput) {
                console.error('Editor elements not found');
                return;
            }

            Promise.all([
                import('https://esm.sh/@tiptap/core@2.11.0'),
                import('https://esm.sh/@tiptap/starter-kit@2.11.0'),
                import('https://esm.sh/@tiptap/extension-placeholder@2.11.0'),
                import('https://esm.sh/@tiptap/extension-paragraph@2.11.0'),
                import('https://esm.sh/@tiptap/extension-bold@2.11.0'),
                import('https://esm.sh/@tiptap/extension-underline@2.11.0'),
                import('https://esm.sh/@tiptap/extension-link@2.11.0'),
                import('https://esm.sh/@tiptap/extension-bullet-list@2.11.0'),
                import('https://esm.sh/@tiptap/extension-ordered-list@2.11.0'),
                import('https://esm.sh/@tiptap/extension-list-item@2.11.0'),
                import('https://esm.sh/@tiptap/extension-blockquote@2.11.0')
            ]).then(([{
                    Editor
                },
                {
                    default: StarterKit
                },
                {
                    default: Placeholder
                },
                {
                    default: Paragraph
                },
                {
                    default: Bold
                },
                {
                    default: Underline
                },
                {
                    default: Link
                },
                {
                    default: BulletList
                },
                {
                    default: OrderedList
                },
                {
                    default: ListItem
                },
                {
                    default: Blockquote
                }
            ]) => {
                try {
                    // Initialize the editor
                    const editor = new Editor({
                        element: editorField,
                        editorProps: {
                            attributes: {
                                class: 'relative min-h-40 p-3 tiptap'
                            }
                        },
                        extensions: [
                            StarterKit.configure({
                                history: false
                            }),
                            Placeholder.configure({
                                placeholder: 'Write your article content here...',
                                emptyNodeClass: 'before:text-gray-500'
                            }),
                            Paragraph.configure({
                                HTMLAttributes: {
                                    class: 'text-inherit text-gray-800 dark:text-neutral-200'
                                }
                            }),
                            Bold.configure({
                                HTMLAttributes: {
                                    class: 'font-bold'
                                }
                            }),
                            Underline,
                            Link.configure({
                                HTMLAttributes: {
                                    class: 'inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-white'
                                }
                            }),
                            BulletList.configure({
                                HTMLAttributes: {
                                    class: 'list-disc list-inside text-gray-800 dark:text-white'
                                }
                            }),
                            OrderedList.configure({
                                HTMLAttributes: {
                                    class: 'list-decimal list-inside text-gray-800 dark:text-white'
                                }
                            }),
                            ListItem.configure({
                                HTMLAttributes: {
                                    class: 'marker:text-sm'
                                }
                            }),
                            Blockquote.configure({
                                HTMLAttributes: {
                                    class: 'relative border-s-4 ps-4 sm:ps-6 dark:border-neutral-700 sm:[&>p]:text-lg'
                                }
                            })
                        ],
                        content: contentInput.value || '',
                        onUpdate: ({
                            editor
                        }) => {
                            const content = editor.getHTML();

                            // Call the Livewire updateContent method
                            @this.updateContent(content);
                        }
                    });

                    // Set up toolbar button actions
                    const actions = [{
                            id: `${editorSelector} [data-hs-editor-bold]`,
                            fn: () => editor.chain().focus().toggleBold().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-italic]`,
                            fn: () => editor.chain().focus().toggleItalic().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-underline]`,
                            fn: () => editor.chain().focus().toggleUnderline().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-strike]`,
                            fn: () => editor.chain().focus().toggleStrike().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-link]`,
                            fn: () => {
                                const url = window.prompt('URL');
                                editor.chain().focus().extendMarkRange('link').setLink({
                                    href: url
                                }).run();
                            }
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-ol]`,
                            fn: () => editor.chain().focus().toggleOrderedList().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-ul]`,
                            fn: () => editor.chain().focus().toggleBulletList().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-blockquote]`,
                            fn: () => editor.chain().focus().toggleBlockquote().run()
                        },
                        {
                            id: `${editorSelector} [data-hs-editor-code]`,
                            fn: () => editor.chain().focus().toggleCode().run()
                        }
                    ];

                    // Attach event listeners to buttons
                    actions.forEach(({
                        id,
                        fn
                    }) => {
                        const button = document.querySelector(id);
                        if (button) {
                            button.addEventListener('click', fn);
                        } else {
                            console.warn(`Button not found: ${id}`);
                        }
                    });

                    // Store the editor instance for potential future reference
                    window[`tiptapEditor_${editorId}`] = editor;

                    console.log(`TipTap editor initialized for ${editorId}`);
                } catch (error) {
                    console.error('Error initializing TipTap editor:', error);
                }
            }).catch(error => {
                console.error('Failed to load TipTap modules:', error);
            });
        }

        // Clean up when the component is removed
        document.addEventListener('livewire:navigating', function() {
            const editorId = '{{ $editorId }}';
            const editorInstance = window[`tiptapEditor_${editorId}`];

            if (editorInstance) {
                editorInstance.destroy();
                delete window[`tiptapEditor_${editorId}`];
            }
        });
    </script>
</div>
