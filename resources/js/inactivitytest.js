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
        const warningDiv = document.createElement('div');
        warningDiv.id = 'inactivity-warning';
        warningDiv.style.position = 'fixed';
        warningDiv.style.top = '50%';
        warningDiv.style.left = '50%';
        warningDiv.style.transform = 'translate(-50%, -50%)';
        warningDiv.style.padding = '20px';
        warningDiv.style.backgroundColor = 'red';
        warningDiv.style.color = 'white';
        warningDiv.style.zIndex = '1000';
        warningDiv.style.textAlign = 'center';
        warningDiv.style.borderRadius = '10px';
        warningDiv.style.fontSize = '24px'; 
        warningDiv.style.width = '20rem'; 
        warningDiv.style.height = '10rem'; 
        warningDiv.innerText = 'You will be redirected in 10 seconds due to inactivity.';
        document.body.appendChild(warningDiv);
    }

    function hideWarning() {
        const warningDiv = document.getElementById('inactivity-warning');
        if (warningDiv){
            warningDiv.remove();
        }
    }

    function clearCookies() {
        document.cookie.split(";").forEach(function(c) {
            document.cookie = c.trim().split("=")[0] + '=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/';
        });
    }

    function logout() {
        clearCookies();
        window.location.href = "/";
    }

    function resetTimer() {
        clearTimeout(time);
        clearTimeout(warningTimeout);
        hideWarning();
        time = setTimeout(logout, redirectTime);
        warningTimeout = setTimeout(showWarning, redirectTime - warningTime);
    }

    resetTimer();
};

inactivityTime();