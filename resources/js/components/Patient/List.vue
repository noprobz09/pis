<template>
    <div class="clearfix">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Lists of Patients</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="notification" style="display: none;">
                        <div class="alert"></div>
                    </div>
                    <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="datatable_length">
                                    <label>
                                        Show 
                                        <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                            <th>Sex</th>
                                            <th>Civil Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd" v-for="patient in patients" v-bind:key="patient.id">
                                            <td>{{ patient.fname }}</td>
                                            <td>{{ patient.lname }}</td>
                                            <td>{{ patient.mname }}</td>
                                            <td>{{ patient.dob }}</td>
                                            <td>{{ patient.age }}</td>
                                            <td>{{ (patient.sex == 1)   ?   'Male'  :   'Female' }}</td>
                                            <td v-if="patient.civil_status == 1">Single</td>
                                            <td v-else-if="patient.civil_status == 2">Married</td>
                                            <td v-else-if="patient.civil_status == 2">Widowed</td>
                                            <td v-else-if="patient.civil_status == 3">Separated</td>
                                            <td v-else-if="patient.civil_status == 4">Divorced</td>
                                            <td v-else>Single</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="#">
                                                <i class="fa fa-credit-card"></i> Payment
                                                </a>
                                                <router-link :to="{ name: 'patientDetail', params: {id: patient.id} }" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-eye"></i> View
                                                </router-link>

                                                <a class="btn btn-sm btn-danger" href="#">
                                                <i class="fa fa-exclamation-circle"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li>
                                        <li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li>
                                        <li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li>
                                        <li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">

    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    import { Toaster } from '../../helpers/Toaster';

    const PatientRepository = RepositoryFactory.get('patients');

    
    export default {
    
        data() {
            return {

                patients: {}

            }
        },

        methods: {

            async fetch() {

                const fetch = await PatientRepository.get();

                this.patients = fetch.data.patients;

            }


        },

        created(){

            this.fetch();

        }

    }
</script>