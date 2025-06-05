function verifyId()
{
    const libraryIds=["L001","L011","L012","L013"];//Existing or registered Id's
    let id=document.getElementById("idDocument").value;
    let messageElm=document.getElementById("messageElm");
    let hasLibraryId=false;
    for(let i=0;i<libraryIds.length;i++)
    {
        if(id==libraryIds[i])
        {
            hasLibraryId=true;
        }
    }
    if(hasLibraryId)
    {
        messageElm.innerText="Id accepted";
    }
    else
    {
        messageElm.innerText="User not registered";
    }
}

function getReturnDate()
{
    let loanDate=document.getElementById("loanDate").value;
    let returnDateElm=document.getElementById("returnDate");
    let returnDate=new Date(loanDate);
    returnDate.setDate(returnDate.getDate()+30);
    returnDate=returnDate.toISOString().slice(0,10)
    returnDateElm.value=returnDate;
}
function addLoan()
{
    let id=document.getElementById("idDocument").value;
    let title=document.getElementById("title").value;
    let loanDate=document.getElementById("loanDate").value;
    let returnDate=document.getElementById("returnDate").value;
    alert(returnDate);
    let newLoan="";
    newLoan+="<td>"+id+"</td>";
    newLoan+="<td>"+loanDate+"</td>";
    newLoan+="<td>"+title+"</td>";
    newLoan+="<td>"+returnDate+"</td>";
    newLoan+="<td></td>";
    document.getElementById('bookLoans').insertRow(-1).innerHTML = newLoan;
}