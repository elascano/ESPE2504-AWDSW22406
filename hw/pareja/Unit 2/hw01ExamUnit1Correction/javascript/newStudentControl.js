function controlGrade(gradeId)
{
    const gradeInput=document.getElementById(gradeId);
    if(!validateGrade(gradeId))
    {
        alert("Grade must be between 0 and 20");
        gradeInput.classList.add("invalidInput");
        gradeInput.value="";
    }
    else
    {
        gradeInput.classList.remove("invalidInput");
    }
}

function validateGrade(gradeId)
{
    let gradeValue=document.getElementById(gradeId).value;
    if(gradeValue >=0 && gradeValue <= 20)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function calculateFinalGrade()
{
    let gradeU1=Number(document.getElementById("gradeUnit1").value);
    let gradeU2=Number(document.getElementById("gradeUnit2").value);
    let gradeU3=Number(document.getElementById("gradeUnit3").value);
    const grades=[gradeU1, gradeU2, gradeU3];
    let cont=3;
    let finalGrade=0;
    for(let i=0;i<3;i++)
    {
        if(grades[i]==0 || grades[i]=="")
        {
            cont--;
        }
        finalGrade+=grades[i];
    }
    finalGrade/=cont;
    document.getElementById("finalGrade").value=finalGrade;
}