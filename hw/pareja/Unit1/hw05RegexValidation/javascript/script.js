function urlControl()
{
    const inputElm=document.getElementById('enteredURL');
    const alertLabel=document.getElementById('alertLabel');
    alertLabel.innerHTML="";
    if(!validateURL())
    {
        inputElm.classList.add('invalid-input');
        alertLabel.classList.remove('label-valid');
        alertLabel.classList.add('label-invalid');
        alertLabel.innerHTML="This is not a government site. Beware";
    }
    else
    {
        inputElm.classList.remove('invalid-input');
        alertLabel.classList.add('label-valid');
        alertLabel.classList.remove('label-invalid');
        alertLabel.innerHTML="This is a government site";
    }
}

function validateURL()
{
    let typedURL=inputElm=document.getElementById('enteredURL').value;
    const format=/^(\bhttps:\/\/\b){1}[a-zA-Z\.]{2,}(\b.gob.ec\b)+[a-zA-Z0-9\.\/\#]*$/;
    if(format.test(typedURL))
    {
        return true;
    }
    else
    {
        return false;
    }
}

