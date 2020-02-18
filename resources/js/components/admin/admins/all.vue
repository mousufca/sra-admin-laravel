<template>
    <div>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="basic-datatable" class="mg">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Admins</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <p class="card-text">
                                    <router-link to="/add-admin"  class="btn btn-primary mb-2 waves-effect waves-light text-white"><i class="feather icon-plus"></i>&nbsp; Add new admin</router-link>
                                </p>
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Registered on</th>
                                            <th>Status</th>
                                            <th>Modify</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr v-for="admin in admins" :key="admin.id">
                                            <td>{{admin.id}}</td>
                                            <td>{{admin.name | toCap}}</td>
                                            <td>{{admin.username}}</td>
                                            <td>{{admin.role | toCap}}</td>
                                            <td>{{admin.created_at | toDate}}</td>
                                            <td>
                                                <i v-if="admin.active" class="feather icon-check font-medium-1 text-success"></i>
                                                <i v-else class="feather icon-x font-medium-1 text-danger"></i>
                                            <td>
                                                <a href="" class="mr-1 font-medium-1">
                                                    <i class="feather icon-edit"></i>
                                                </a>
                                                <a href="" class="text-danger font-medium-1">
                                                    <i class="feather icon-trash-2"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Modify</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                admins : {}
            }
        },
        mounted() {
            this.loadAdmins();
        },
        methods : {
            loadAdmins(){
                axios.get('api/admin')
                .then(({data}) => (this.admins = data))
            }
        }
    }
</script>
