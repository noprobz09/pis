<template>
    <div class="clearfix">
        <div class="col-xs-3">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Initial Evaluation</a></li>
                <li class=""><a href="#initial-evaluations" data-toggle="tab" aria-expanded="false">Coordination &amp; Balance Exam</a></li>
                <li class=""><a href="#initial-evaluations" data-toggle="tab" aria-expanded="false">Balance Tests</a></li>
                <li class=""><a href="#initial-evaluations" data-toggle="tab" aria-expanded="false">Manual Muscle Tests</a></li>
                <li class=""><a href="#initial-evaluations" data-toggle="tab" aria-expanded="false">ROM Eval</a></li>
                <li class=""><a href="#initial-evaluations" data-toggle="tab" aria-expanded="false">Special Tests</a></li>
                <li class=""><a href="#initial-evaluations" data-toggle="tab" aria-expanded="false">Postural Analysis</a></li>
                <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Gait Analysis</a></li>
                <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Assessment Plan</a></li>
                <li><a href="#initial-evaluations" data-toggle="tab" aria-expanded="true">Re-evaluation</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <form method="POST" v-on:submit.prevent="submit">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="initial-evaluations" aria-labelledby="initial-evaluations">
                        <div class="clearfix">
                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class=""><a href="#initial-evaluation-1" id="initial-evaluation-1-tab" role="tab" data-toggle="tab" aria-expanded="true">Initial Evaluation 1</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#initial-evaluation-2" role="tab" id="initial-evaluation-2-tab" data-toggle="tab" aria-expanded="true">Initial Evaluation 2</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade" id="initial-evaluation-1" aria-labelledby="initial-evaluation-1-tab">
                                        <FirstEvaluation 
                                            :firstEvaluation="evaluation.firstEvaluation"
                                            @input="(newValue) => {evaluation = newValue;console.log('asdf');}"></FirstEvaluation>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="initial-evaluation-2" aria-labelledby="initial-evaluation-2-tab">
                                        <!-- <SecondEvaluation></SecondEvaluation> -->
                                    </div>
                                </div>
                                <div class="action text-right">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save</button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</template>

<script type="text/javascript">
    import { RepositoryFactory } from '../../repositories/RepositoryFactory';
    import { Toaster } from '../../helpers/Toaster';
    import FirstEvaluation from '../Patient/Evaluation/FirstEvaluation';
    import SecondEvaluation from '../Patient/Evaluation/SecondEvaluation';

    const PatientRepository = RepositoryFactory.get('patients');

    export default {

        components: {
            FirstEvaluation,
            SecondEvaluation
        },

        data() {

            return {
                
                evaluation: {
                    firstEvaluation: {
                        homeSituation: {},
                        generalStatus: {},
                        socialHealth: {},
                        hpi: {},
                        ancillaryService: {},
                        laboratoryResults: {},
                        activities: {},
                        familyHistory: {},
                        surgicalHistory: {},
                        inspections: {},
                        vitalSigns: {},
                        gradingPulse: {},
                        findingsOne: {},
                    },
                    patient_id: this.$route.params.id
                },

            }

        },

        methods: {

            async submit() {
               
                const evaluation = await PatientRepository.update(this.evaluation);

                Toaster.notification(evaluation.data);    
            },

            async fetch() {

                const evaluation = await PatientRepository.getEvaluation(1, this.$route.params.id);

                this.fillObject(evaluation.data.first_evaluation, 'firstEvaluation');
                this.fillObject(evaluation.data.second_evaluation, 'secondEvaluation');
                
            },

            fillObject(object, evaluationType) {

                if (typeof object != 'undefined' && typeof this.evaluation[evaluationType] != 'undefined') {
                    const evaluationkeys = Object.keys(this.evaluation[evaluationType]);

                    //dynamically assign/fill this.evaluation props data from fetch data
                    for (let firstLoop = 0; firstLoop < evaluationkeys.length; firstLoop++) {
                        let evaluationTypeKeys = Object.keys(this.evaluation[evaluationType][evaluationkeys[firstLoop]]);

                        this.evaluation[evaluationType][evaluationkeys[firstLoop]] = object[evaluationkeys[firstLoop]];

                        // for (let secondLoop = 0; secondLoop < evaluationTypeKeys.length; secondLoop++) {
                        
                        //     if (typeof object[evaluationkeys[firstLoop]] != 'undefined') {
                        //         this.evaluation[evaluationType][evaluationkeys[firstLoop]][evaluationTypeKeys[secondLoop]] = object[evaluationkeys[firstLoop]][evaluationTypeKeys[secondLoop]];
                        //     }                            
                        // }
                    }
                }

                //console.log(this.evaluation);

            }
            
        },

        created() {

            this.fetch();
            
        }

        
    }
</script>

