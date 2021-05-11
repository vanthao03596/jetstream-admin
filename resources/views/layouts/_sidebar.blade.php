<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col h-0 flex-1">
            <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-rose-500-mark-white-text.svg" alt="Workflow">
            </div>
            <div class="flex-1 flex flex-col overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800">
                    <div class="space-y-1">

                        <a href= "{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300'  }} group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" aria-current="page" x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            <svg class="text-gray-300 mr-3 h-6 w-6" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-gray-300&quot;, Default: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            {{ __('Dashboard') }}
                        </a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/view-list" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            My Issues
                        </a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/user-circle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Assigned
                        </a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/archive" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                            </svg>
                            Closed
                        </a>

                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">
                            <svg class="text-gray-400 group-hover:text-gray-300 mr-3 h-6 w-6" x-state-description="undefined: &quot;text-gray-300&quot;, undefined: &quot;text-gray-400 group-hover:text-gray-300&quot;" x-description="Heroicon name: outline/clock" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Recent
                        </a>

                        <div x-data="{ open: false }" class="space-y-1">
                            <button type="button" class="text-gray-300 hover:bg-gray-700 hover:text-white group w-full flex items-center pl-2 pr-1 py-2 text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" x-state:on="Current" x-state:off="Default" aria-controls="sub-menu-1" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()" x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                Team
                                <svg class="ml-auto h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150 text-gray-300" viewBox="0 0 20 20" x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true" :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }">
                                    <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
                                </svg>
                            </button>
                            <div x-description="Expandable link section, show/hide based on state." class="space-y-1" id="sub-menu-1" x-show="open" style="display: none;">
                                
                                <a href="#" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                    Overview
                                </a>
                                
                                <a href="#" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                    Members
                                </a>
                                
                                <a href="#" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                    Calendar
                                </a>
                                
                                <a href="#" class="group w-full flex items-center pl-11 pr-2 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                    Settings
                                </a>
                                
                            </div>
                        </div>

                    </div>
                    <div class="mt-10">
                        <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">
                            Projects
                        </p>
                        <div class="mt-2 space-y-1">

                            <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                <span class="truncate">
                                    GraphQL API
                                </span>
                            </a>

                            <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                <span class="truncate">
                                    iOS App
                                </span>
                            </a>

                            <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                <span class="truncate">
                                    Marketing Site Redesign
                                </span>
                            </a>

                            <a href="#" class="group flex items-center px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700">
                                <span class="truncate">
                                    Customer Portal
                                </span>
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
