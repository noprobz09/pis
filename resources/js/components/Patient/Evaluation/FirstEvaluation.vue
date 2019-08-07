<template>
    <div class="clearfix">
        <div class="col-xs-3">
            <ul class="nav nav-tabs tabs-left">
                <li role="presentation" class="active">
                    <a href="#home-situation" role="tab" id="home-situation-tab" data-toggle="tab" aria-expanded="true">Home Situation/Living Environment</a>
                </li>
                <li role="presentation" class="">
                    <a href="#general-status" role="tab" id="general-status-tab2" data-toggle="tab" aria-expanded="false">General Status</a>
                </li>
                <li role="presentation" class="">
                    <a href="#social-health" role="tab" id="social-health-tab2" data-toggle="tab" aria-expanded="true">Social/Health Habits</a>
                </li>
                <li role="presentation" class="">
                    <a href="#hpi" role="tab" id="hpi-tab2" data-toggle="tab" aria-expanded="true">HPI: Medications</a>
                </li>
                <li role="presentation" class="">
                    <a href="#ancillary-service" role="tab" id="ancillary-service-tab2" data-toggle="tab" aria-expanded="true">Ancillary Service</a>
                </li>
                <li role="presentation" class="">
                    <a href="#laboratory-results" role="tab" id="laboratory-results-tab2" data-toggle="tab" aria-expanded="true">Laboratory Results</a>
                </li>
                <li role="presentation" class="">
                    <a href="#activities" role="tab" id="activities-tab2" data-toggle="tab" aria-expanded="true">Activities</a>
                </li>
                <li role="presentation" class="">
                    <a href="#family-history" role="tab" id="family-history-tab2" data-toggle="tab" aria-expanded="true">Family History</a>
                </li>
                <li role="presentation" class="">
                    <a href="#medical-surgical-history" role="tab" id="medical-surgical-history-tab2" data-toggle="tab" aria-expanded="true">Medical Surgical History</a>
                </li>
                <li role="presentation" class="">
                    <a href="#inspections" role="tab" id="inspections-tab2" data-toggle="tab" aria-expanded="true">Inspection</a>
                </li>
                <li role="presentation" class="">
                    <a href="#vital-signs" role="tab" id="vital-signs-tab2" data-toggle="tab" aria-expanded="true">Vital Signs</a>
                </li>
                <li role="presentation" class="">
                    <a href="#grading-pulse" role="tab" id="grading-pulse-tab2" data-toggle="tab" aria-expanded="true">Numerical Scale for Grading Pulse Quality</a>
                </li>
                <li role="presentation" class="">
                    <a href="#findings1" role="tab" id="findings1-tab2" data-toggle="tab" aria-expanded="true">Findings</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-9">
            <div class="tab-content">

                <div class="tab-pane active in" id="home-situation">
                    <HomeSituation v-model="firstEvaluation.homeSituation" :homeSituation="firstEvaluation.homeSituation"></HomeSituation>
                </div> 

                
                <div class="tab-pane" id="general-status">
                    <GeneralStatus v-model="firstEvaluation.generalStatus" :generalStatus="firstEvaluation.generalStatus"></GeneralStatus>
                </div>

                
                <div class="tab-pane" id="social-health">
                    <SocialHealth v-model="firstEvaluation.socialHealth" :socialHealth="firstEvaluation.socialHealth"></SocialHealth>
                </div>   

                <div class="tab-pane" id="hpi">
                    <Hpi v-model="firstEvaluation.hpi" :hpi="firstEvaluation.hpi"></Hpi>
                </div>

                <div class="tab-pane" id="ancillary-service">
                    <AncillaryService v-model="firstEvaluation.ancillaryService" :ancillaryService="firstEvaluation.ancillaryService"></AncillaryService>
                </div>

                <div class="tab-pane" id="laboratory-results">
                    <LaboratoryResults v-model="firstEvaluation.laboratoryResults" :laboratoryResults="firstEvaluation.laboratoryResults"></LaboratoryResults>
                </div>

                <div class="tab-pane" id="activities">
                    <Activities v-model="firstEvaluation.activities" :activities="firstEvaluation.activities"></Activities>
                </div>

                <div class="tab-pane" id="family-history">
                    <FamilyHistory v-model="firstEvaluation.familyHistory" :familyHistory="firstEvaluation.familyHistory"></FamilyHistory>
                </div>
                
                <div class="tab-pane" id="medical-surgical-history">
                    <MedicalSurgicalHistory v-model="firstEvaluation.surgicalHistory" :surgicalHistory="firstEvaluation.surgicalHistory"></MedicalSurgicalHistory>
                </div>
                
                <div class="tab-pane" id="inspections">
                    <Inspections v-model="firstEvaluation.inspections" :inspections="firstEvaluation.inspections"></Inspections>
                </div>

                <div class="tab-pane" id="vital-signs">
                    <VitalSigns v-model="firstEvaluation.vitalSigns" :vitalSigns="firstEvaluation.vitalSigns"></VitalSigns>
                </div>

                <div class="tab-pane" id="grading-pulse">
                    <GradingPulse v-model="firstEvaluation.gradingPulse" :gradingPulse="firstEvaluation.gradingPulse"></GradingPulse>
                </div>

                <div class="tab-pane" id="findings1">
                    <Findings1 v-model="firstEvaluation.findingsOne" :findingsOne="firstEvaluation.findingsOne"></Findings1>
                </div>

            </div>
        </div>
    </div>
</template>

<script type="text/javascript">

    import { RepositoryFactory } from '../../../repositories/RepositoryFactory';
    const PatientRepository = RepositoryFactory.get('patients');


    import HomeSituation from './Evaluation1/HomeSituation';
    import GeneralStatus from './Evaluation1/GeneralStatus';   
    import SocialHealth  from './Evaluation1/SocialHealth';
    import Hpi  from './Evaluation1/Hpi'; 
    import AncillaryService  from './Evaluation1/AncillaryService';
    import LaboratoryResults  from './Evaluation1/LaboratoryResults';
    import Activities  from './Evaluation1/Activities';
    import FamilyHistory  from './Evaluation1/FamilyHistory';
    import MedicalSurgicalHistory  from './Evaluation1/MedicalSurgicalHistory';
    import Inspections  from './Evaluation1/Inspections';
    import VitalSigns  from './Evaluation1/VitalSigns';
    import GradingPulse  from './Evaluation1/GradingPulse';
    import Findings1  from './Evaluation1/Findings1';
    
    export default {
        components : {
            HomeSituation,
            GeneralStatus,
            SocialHealth,
            Hpi,
            AncillaryService,
            LaboratoryResults,
            Activities,
            FamilyHistory,
            MedicalSurgicalHistory,
            Inspections,
            VitalSigns,
            GradingPulse,
            Findings1,
        },

        props: {
            firstEvaluation: {
                type: Object,
                required: true
            }
        },
        
}
</script>