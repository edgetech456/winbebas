$(document).ready(function() {
    console.log('Ready');
});

document.addEventListener("DOMContentLoaded", function () {
    const downloadBtn = document.getElementById("download-btn");
    const deviceIcon = document.getElementById("device-icon");

    const userAgent = navigator.userAgent || navigator.vendor || window.opera;

    if (/android/i.test(userAgent)) {
        downloadBtn.href = "https://images.6440949940.com/wsd-images-prod/winbemyrf6/merchant_resource/android/winbemyrf6_2.4.68_20250726120129.apk";
        deviceIcon.src = "images/icon-android.png";
    } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        downloadBtn.href = "https://images.6440949940.com/wsd-images-prod/winbemyrf6/merchant_resource/mobileconfig/winbemyrf6_2.4.3_20250726120113.mobileconfig";
        deviceIcon.src = "images/icon-ios.png";
    } else {
        downloadBtn.href = "https://images.6440949940.com/wsd-images-prod/winbemyrf6/merchant_resource/android/winbemyrf6_2.4.68_20250726120129.apk";
        deviceIcon.src = "images/icon-android.png";
    }
});