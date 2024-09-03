{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!-- resources/views/dashboard/affiliate.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Affiliate Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-3">
                        <!-- Total Referrals -->
                        <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h2 class="text-lg font-semibold">Total Referrals</h2>
                            <p class="text-3xl font-bold">{{ $referrals->count() }}</p>
                        </div>

                        <!-- Total Commissions -->
                        <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h2 class="text-lg font-semibold">Total Commissions</h2>
                            <p class="text-3xl font-bold">${{ number_format($totalCommissions, 2) }}</p>
                        </div>

                        <!-- Pending Payouts -->
                        <div class="p-4 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h2 class="text-lg font-semibold">Pending Payouts</h2>
                            <p class="text-3xl font-bold">${{ number_format($pendingPayouts, 2) }}</p>
                        </div>
                    </div>

                    <!-- Referrals Table -->
                    <div class="overflow-hidden bg-white rounded-lg shadow dark:bg-gray-800">
                        <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700">
                            <h2 class="text-lg font-semibold">Your Referrals</h2>
                        </div>
                        <table class="min-w-full bg-white dark:bg-gray-800">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">Referral Name
                                    </th>
                                    <th class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">Date Referred
                                    </th>
                                    <th class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($referrals as $referral)
                                    <tr>
                                        <td class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">
                                            {{ $referral->name }}</td>
                                        <td class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">
                                            {{ $referral->created_at->format('M d, Y') }}</td>
                                        <td class="px-4 py-2 border-b border-gray-200 dark:border-gray-700">
                                            @if ($referral->status == 'converted')
                                                <span class="font-semibold text-green-500">Converted</span>
                                            @else
                                                <span class="font-semibold text-yellow-500">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3"
                                            class="px-4 py-4 text-center text-gray-500 dark:text-gray-400">No referrals
                                            yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
