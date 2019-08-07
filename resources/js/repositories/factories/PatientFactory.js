import Repository from "../Repository";

const resource = "/patient";

export default {
    
    get() {
        return Repository.get(`${resource}`);
    },

    create(payload) {
        return Repository.post(`${resource}/create`, payload);
    },

    update(payload) {
        return Repository.patch(`${resource}/update`, payload);
    },

    view(id) {
        return Repository.get(`${resource}/${id}`);
    },

    getEvaluation(type, id) {
        return Repository.get(`${resource}/evaluation/${type}/${id}`);
    }

};