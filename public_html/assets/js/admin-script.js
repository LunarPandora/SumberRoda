const getData = (url, formID) => {
    const data = new FormData($(`#${formID}`)[0]);
    
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        contentType: false,
        cache: false,
        processData: false
    })
    .done((response) => {
        console.log(response);
    })
    .fail((err) => {
        console.log(err)
    })
}

function closeModal (url) {
    location.href = url;
}