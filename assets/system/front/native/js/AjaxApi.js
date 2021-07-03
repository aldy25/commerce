class AjaxApi
{
    ajaxGet(endpoint,callbackOnWait,callBackOnSuccess,callbackOnError)
    {
        $.ajax({
            url:endpoint,
            type:"get",
            cache:false,
            async:true,
            beforeSend:function()
            {
                callbackOnWait();
            },
            success:function(res)
            {
                callBackOnSuccess(res);
            },
            error:function()
            {
                callbackOnError();
            }
        });
    }

    ajaxPost(endpoint,data,callbackOnWait,callBackOnSuccess,callbackOnError)
    {
        $.ajax({
            url:endpoint,
            type:"post",
            cache:false,
            data:data,
            async:true,
            beforeSend:function()
            {
                callbackOnWait();
            },
            success:function(res)
            {
                callBackOnSuccess(res);
            },
            error:function()
            {
                callbackOnError();
            }
        });
    }

    ajaxPostEncoded(endpoint,data,callbackOnWait = null,callBackOnSuccess = null,callbackOnError = null)
    {
        $.ajax({
            url:endpoint,
            type:"post",
            data: new FormData(data),
            cache:false,
            async:true,
            processData:false,
            contentType:false,
            beforeSend:function()
            {
                callbackOnWait();
            },
            success:function(res)
            {
                callBackOnSuccess(res);
            },
            error:function()
            {
                callbackOnError();
            }
        })
    }
}

let ajaxApi = new AjaxApi();