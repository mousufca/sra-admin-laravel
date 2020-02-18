<template>
    <div>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Admins</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Admins</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="basic-input" class="mg">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Admin</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form @submit.prevent="createUser">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Name</label>
                                        <input aria-invalid="true" v-model="form.name" type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                                        <has-error :form="form" field="name"></has-error>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="basicInput">Email</label>
                                        <input v-model="form.username" type="email" name="username" class="form-control" id="email" placeholder="Enter email">
                                        <has-error :form="form" field="username"></has-error>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="">Profile image</label>
                                        <div class="custom-file">
                                            <input name="profile" type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose image</label>
                                        </div>
                                        <has-error :form="form" field="profile"></has-error>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="basicInput">Role</label>
                                        <select v-model="form.role" name="role" class="form-control" id="basicSelect">
                                            <option value="admin">Admin</option>
                                            <option value="super">Super Admin</option>
                                        </select>
                                        <has-error :form="form" field="role"></has-error>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="basicInput">Password</label>
                                        <input v-model="form.password" name="password" type="password" class="form-control" id="basicInput" placeholder="Enter password">
                                        <has-error :form="form" field="password"></has-error>
                                    </fieldset>
                                    <div class="custom-control custom-switch custom-switch-success mr-2 mb-1">
                                        <p class="mb-0">Active</p>
                                        <input v-model="form.active" name="active" type="checkbox" class="custom-control-input" id="customSwitch11">
                                        <label class="custom-control-label" for="customSwitch11">
                                            <span class="switch-icon-left"><i class="feather icon-check"></i></span>
                                            <span class="switch-icon-right"><i class="feather icon-x"></i></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                </form>
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
                form : new Form({
                    name : '',
                    username : '',
                    profile : '',
                    role : 'admin',
                    password : '',
                    active : false
                })
            }
        },
        methods : {
            createUser(){
                this.$Progress.start()
                this.form.post('api/admin')
                .then(()=>{
                    this.$Progress.finish()
                    toast.fire({
                        icon: 'success',
                        title: 'Admin created in successfully'
                    })
                    this.$router.push('admins')
                }).catch(()=>{
                    this.$Progress.fail()
                })

            }
        }
    }
</script>

