var countCareersOperation = 0;
var currentPage = 1;
var page = 0;
const careersOperationsTable = () => {
    const careersOperations = document.getElementById('careersOperationsTable');
    if (careersOperations) {
        const records = careersOperations.querySelectorAll('.item');
        countCareersOperation = records.length;
        page = Math.ceil(records.length / 2)
        hiddenAllItem(records);
        showTwoElement(records);
        document.getElementById('nextPage').addEventListener('click', nextPage);
        document.getElementById('showAll').addEventListener('click', showAll);
    }
}
const hiddenAllItem = (records) => {
    records.addClass('hidden')
};
const showTwoElement = (records) => {
    const index = (currentPage - 1) * 2;
    records[index].classList.remove('hidden');
    records[index + 1]?.classList?.remove('hidden');
}
const nextPage = () => {
    if (currentPage < page) {
        currentPage += 1;
        const records = document.querySelectorAll('#careersOperationsTable .item');
        hiddenAllItem(records);
        showTwoElement(records)
    }
    if (currentPage === page) {
        document.getElementById('nextPage').classList.add('hidden');
    }
}
const showAll = () => {
    document.querySelectorAll('#careersOperationsTable .item').removeClass('hidden');
    document.getElementById('nextPage').classList.add('hidden');
}
export default careersOperationsTable;