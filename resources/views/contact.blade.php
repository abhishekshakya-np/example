<x-layout>
    <x-slot:heading>
        Contact Us
    </x-slot:heading>

    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Get in Touch</h2>
                    <p class="mt-2 text-gray-600">
                        Have questions about our job listings? We're here to help!
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900">Email</h3>
                        </div>
                        <p class="text-gray-600">jobs@example.com</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="flex items-center mb-4">
                            <svg class="h-6 w-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                        </div>
                        <p class="text-gray-600">+1 (555) 123-4567</p>
                    </div>
                </div>

                <div class="mt-8">
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Quick Links</h3>
                        <div class="space-y-2">
                            <a href="{{ route('jobs.index') }}" class="block text-blue-600 hover:text-blue-800">
                                → Browse All Jobs
                            </a>
                            <a href="/" class="block text-blue-600 hover:text-blue-800">
                                → Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
