let inactivityTime = function () {
    let time;
    const redirectTime = 5 * 60 * 1000; 
    const warningTime = 10 * 1000;
    let warningTimeout;

    window.onload = resetTimer;
    window.onclick = resetTimer;
    window.ontouchstart = resetTimer;
    window.ontouchmove = resetTimer;
    window.onmousedown = resetTimer;

    function showWarning() {
        const warningDiv = document.createElement("div");
        warningDiv.id = "inactivity-warning";
        warningDiv.style.position = "fixed";
        warningDiv.style.top = "50%";
        warningDiv.style.left = "50%";
        warningDiv.style.transform = "translate(-50%, -50%)";
        warningDiv.style.padding = "20px";
        warningDiv.style.backgroundColor = "red";
        warningDiv.style.color = "white";
        warningDiv.style.zIndex = "1000";
        warningDiv.style.textAlign = "center";
        warningDiv.style.borderRadius = "10px";
        warningDiv.style.fontSize = "24px";
        warningDiv.style.width = "20rem";
        warningDiv.style.height = "10rem";
        warningDiv.innerText =
            "You will be redirected in 10 seconds due to inactivity.";
        document.body.appendChild(warningDiv);
        console.log("Warning displayed");
    }

    function hideWarning() {
        const warningDiv = document.getElementById("inactivity-warning");
        if (warningDiv) {
            warningDiv.remove();
            console.log("Warning hidden");
        }
    }

    function deleteMealPreferenceCookie() {
        fetch('/delete_preference', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                console.log("Deleted meal_preference cookie");
            } else {
                console.error("Failed to delete meal_preference cookie");
            }
        })
        .catch(error => console.error('Error:', error));
    }

    function logout() {
        console.log("Logout function called");
        deleteMealPreferenceCookie();
        window.location.href = "/";
    }

    function resetTimer() {
        console.log("Timer reset");
        clearTimeout(time);
        clearTimeout(warningTimeout);
        hideWarning();
        time = setTimeout(logout, redirectTime);
        warningTimeout = setTimeout(showWarning, redirectTime - warningTime);
        warningTimeout = setTimeout(showWarning, redirectTime - warningTime);
    }

    resetTimer();
};

inactivityTime();