<template>
	<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <router-link to="/users/new" class="btn btn-primary" style="background-color:blue">Invite User</router-link>
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">User List</h4>
                            <p class="category">Manage User Accounts</p>
                        </div>
                        <div class="card-content table-responsive">
                            <users-table></users-table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import UsersTable from './UsersTable.vue'

    export default {
        components: {UsersTable}

    }
</script>