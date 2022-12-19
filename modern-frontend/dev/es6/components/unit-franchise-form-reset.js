import { removeSingleOpportunity, removeGroupOfOpportunities} from '../components/unit-franchise-application-form-and-opportunities-table';

const removeAllUnitForm = () => {
    removeSingleOpportunity();
    removeGroupOfOpportunities();
}

export { removeAllUnitForm };