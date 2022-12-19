// // Importando programación JavaScript de los componentes
import './components/dom';
import menuOffCanvas from './components/menuOffCanvas';
import swiperCleaning from './components/swipers';
import IndustriesCollapse from './components/industries-collapse';
import BootstrapDropdownMenu from './components/bootstrap-dropdown-menu';
import { addAllExperiencesCareersForm } from './components/add-all-experiences-careers-form';
import { careerApplicationForm } from './components/career-application-form';
import allForms from './components/all-forms';
import swiperUnitFranchiseRigth from './components/swiper-unit-franchise';
import { unitFranchiseSingleAndGroupOpportunities } from './components/unit-franchise-application-form-and-opportunities-table';
import canadaTelephoneFormat from './components/canada-telephone-format';
import selectsFormValidate from './components/form_validation_selects';
import careersOperationsTable from './components/careers-operation-table';
import jobSelect from './components/jobsSelect';
import uploadFile from './components/uploadFile';
import UnitTerritoryDisclaimerCheckbox from './components/unit-territory-disclaimer-checkbox';
import TextHeroCTASlider from './components/text-hero-cta-slider';
import DownloadPDFFactSheetForm from './components/download-pdf-fact-sheet-form';
import selectMultiCheckboxesRfcForm from './components/select-multi-checkboxes-rfc-form';

const $ = require('jquery');
window.$ = $;
require('popper.js');
require('bootstrap');
require('swiper');


// Careers Operation Table
careersOperationsTable();

// career application form 
careerApplicationForm();

// Ejecutando programación JavaScript de los componentes
menuOffCanvas();

//swiper home service
swiperCleaning();

//Industries Accordion
IndustriesCollapse();

// Bootstrap Dropdown Menu
BootstrapDropdownMenu();

//test Form Validate Bootstrap
allForms();

//Swiper unit franchise
swiperUnitFranchiseRigth();

//Application form unit franchise
unitFranchiseSingleAndGroupOpportunities();

//Canada Telephone Format
canadaTelephoneFormat();

//selects  show input other
selectsFormValidate();

// All Experiences Career Form
addAllExperiencesCareersForm();

// Jobs Select - Other Input Enabled
jobSelect();

//validate file size
uploadFile();

// Unit/Territory Franchise Disclaimer Checkbox
UnitTerritoryDisclaimerCheckbox();

// Text Hero CTA Slider
TextHeroCTASlider();

// Download PDF Fact Sheet Form
DownloadPDFFactSheetForm();

// Multiple Checkboxes Selection for RFC Form
selectMultiCheckboxesRfcForm();