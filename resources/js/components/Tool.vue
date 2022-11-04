<template>
    <div>
        <heading class="mb-6">Look Route</heading>
        <card>
            <div class="relative overflow-hidden overflow-x-auto">
                <table>
                    <thead>
                    <tr>
                        <th>Route</th>
                        <th>Name</th>
                        <th>Methods</th>
                        <th>Action</th>
                        <th>Middleware</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="route in routes">
                        <td>{{ route.uri }}</td>
                        <td>{{ route.as }}</td>
                        <td>{{ route.methods }}</td>
                        <td>{{ route.action }}</td>
                        <td>{{ route.middleware }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </card>
    </div>
</template>

<script>
export default {
    metaInfo() {
        return {
          title: 'LookRoute',
        }
    },
    data() {
        return {
            routes: [],
        }
    },
    mounted() {
        this.getRoutes();
    },
    methods: {
        getRoutes() {
            Nova.request().get('/nova-vendor/look-route/routes').then(response => {
                this.routes = response.data;
            });
        },
    },
}
</script>

<style>
/* Scoped Styles */
</style>
