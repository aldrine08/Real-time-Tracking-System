<x-layout.merchant title="Dashboard">

    <div class="space-y-8">

        <!-- Welcome Header -->
        <x-dashboard.welcome-header />

        <!-- KPI Cards -->
        <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">

            <x-cards.stat-card
                title="Total Shipments"
                value="1,248"
                icon="📦"
                color="blue"
                change="+12% this week"
            />

            <x-cards.stat-card
                title="Active Riders"
                value="48"
                icon="🏍️"
                color="green"
                change="+4 online"
            />

            <x-cards.stat-card
                title="Fleet Vehicles"
                value="32"
                icon="🚚"
                color="yellow"
                change="28 Available"
            />

            <x-cards.stat-card
                title="Completed Deliveries"
                value="986"
                icon="✅"
                color="purple"
                change="Today"
            />

            <x-cards.stat-card
    title="Total Vehicles"
    :value="$totalVehicles"
    icon="truck"
/>

<x-cards.stat-card
    title="Available Vehicles"
    :value="$availableVehicles"
    icon="check-circle"
/>

<x-cards.stat-card
    title="Assigned Vehicles"
    :value="$assignedVehicles"
    icon="users"
/>



            

        

        <!-- Quick Actions -->
        <x-dashboard.quick-actions />

        <!-- Map + Activity -->
        <div class="grid gap-8 xl:grid-cols-3">

            <div class="xl:col-span-2">
                <x-maps.live-map />
            </div>

            <div>
                <x-dashboard.activity-timeline />
            </div>

        </div>

        <!-- Recent Shipments -->
        <x-tables.recent-shipments />

    </div>

</x-layout.merchant>


