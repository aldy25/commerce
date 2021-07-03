class SwalHelper
{
    createAlert(json, clearInput = false)
    {
        swal({
            title:json.title,
            type:json.type,
            text:json.text
        });
        notif.showNotification(
            "bg-orange",
            json.text,
            "bottom",
            "right",
            "animated lightSpeedIn",
            "animated lightSpeedOut"
        );
        if(clearInput === true)
        {
            $("input").val("");
            $("select").val("");
            $("select").selectpicker("refresh");
        }
        else {
            console.log("HAHA");
        }
    }
}

let swalert = new SwalHelper();