import PatientFactory from "./factories/PatientFactory";


const repositories = {
    patients: PatientFactory,
};

export const RepositoryFactory = {
  get: name => repositories[name]
};