function validateForm() {
        const birthDate = document.forms["frmStudents"]["txtBirthDate"].value;
        if (!birthDate) {
            alert("Please, enter your birth date.");
            return false;
        }
        const today = new Date();
        const birth = new Date(birthDate);
        const age = today.getFullYear() - birth.getFullYear();
        const monthDiff = today.getMonth() - birth.getMonth();
        if (
            birth > today ||
            (age < 5 || (age === 5 && monthDiff < 0))
        ) {
            alert("Please, enter a valid birth date. It must be at least 5 years old.");
            return false;
        }

    }