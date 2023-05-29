const unsetAction = (url) => {
    let isSuccess = false;
    
    $.ajax({
        type: 'POST',
        url: url,
        contentType: false,
        cache: false,
        processData: false
    })
    .done((response) => {
        
    })
    .fail((err) => {
        
    })
    
    return isSuccess;
}