<div class="relative bg-gray-800 pb-32 ">
    <nav class="bg-gray-800 rounded-[calc(var(--radius-xl)+calc(var(--spacing)*2))]">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="border-b border-white/10">
                <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="/spkpedia/img/logo.png" alt="Logo SPKPedia" class="size-8" />
                        </div>
                        <div class="ml-4 flex items-baseline space-x-4">
                            <?php
                            $current = $_SERVER['REQUEST_URI'];
                            ?>

                            <a href="/spkpedia/methods/saw"
                                class="rounded-md px-3 py-2 text-sm font-medium 
                                <?= (strpos($current, '/spkpedia/methods/saw/dashboard') !== false)
                                    ? 'bg-gray-900 text-white'
                                    : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
                                Dashboard
                            </a>

                            <a href="/spkpedia/methods/saw/kriteria"
                                class="rounded-md px-3 py-2 text-sm font-medium 
                                <?= (strpos($current, '/spkpedia/methods/saw/kriteria') !== false)
                                    ? 'bg-gray-900 text-white'
                                    : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
                                Kriteria
                            </a>

                            <a href="/spkpedia/methods/saw/penilaian"
                                class="rounded-md px-3 py-2 text-sm font-medium 
                                <?= (strpos($current, '/spkpedia/methods/saw/penilaian') !== false)
                                    ? 'bg-gray-900 text-white'
                                    : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
                                Penilaian
                            </a>

                            <a href="/spkpedia/methods/saw/hasil"
                                class="hidden md:block rounded-md px-3 py-2 text-sm font-medium 
                                <?= (strpos($current, '/spkpedia/methods/saw/hasil') !== false)
                                    ? 'bg-gray-900 text-white'
                                    : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
                                Hasil
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between px-4 sm:px-0 md:hidden mb-2">
                    <div class="flex items-center">
                        <div class="mr-8"></div>
                        <div class="ml-4 flex items-baseline space-x-4">
                            <a href="/spkpedia/methods/saw/hasil"
                                class="rounded-md px-3 py-2 text-sm font-medium 
                                <?= (strpos($current, '/spkpedia/methods/saw/hasil') !== false)
                                    ? 'bg-gray-900 text-white'
                                    : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
                                Hasil
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
</div>