<table border="0" cellspacing="0" width="100%">
    <tbody>
      <tr>
        <td></td>
        <td width="345">
          <table border="0" cellspacing="0">
            <tbody>
              <tr style="display:table-cell;display:inline-table;width:100%;padding-top:10px;padding-bottom:10px">
                <td>
                  <a href="#">
                    <img alt="Logo" src="{{asset('frontend/images/logo.png')}}" width="150" height="auto" border="0" style="max-width:120px" class="CToWUd">
                  </a>
                </td>
                <td width="75%" style="text-align:right;font-size:12px">
                  <span><a href="{{route('user.profile')}}" style="color:#333333;text-decoration:none">My account</a></span>
                  |<span style="padding-left:10px">
                    <a href="{{url('/')}}" style="color:#333333;text-decoration:none">Help</a></span>
                  |<span style="padding-left:10px"><a href="{{route('add.page.view')}}" style="color:#333333;text-decoration:none">Post your ad</a></span>
                </td>
              </tr>

              <tr style="width:100%;background-color:#ffffff">
                <td>
                  <a href="{{url('/')}}">
                    <img src="{{asset('frontend/images/logo2.png')}}" alt="..." style="display:table-cell;border-radius:4px 4px 0 0" class="CToWUd">
                  </a>
                </td>
              </tr>
              <tr style="display:table-cell;display:inline-table;width:100%;text-align:center;background-color:#ffffff;border-top:0;margin-bottom:20px">
                <td style="border:1px solid #cccccc;border-radius:0 0 4px 4px;padding:10px;border-top:0">
                  <h2 style="margin-top:10px;text-align:left;padding:15px">
                    @if (! empty($greeting))
                     {{ $greeting }}
                    @endif <br>Welcome to Do my Bidding</h2>

                  <p style="font-size:14px;color:#333333;text-align:justify;padding:15px;line-height:22px;padding-top:0;margin-bottom:0">We’re so pleased to have you on board. All you need to do now is post your first ad. It’s really simple, but if
                    you get stuck at any point along the way, we’ve got a great Customer Service Team waiting to help you out.</p>
                  <a href="{{route('add.page.view')}}"
                    style="text-decoration:none;background:#3d5e8d;border:1px solid #3d5e8d;height:40px;border-radius:4px;color:#ffffff;font-weight:600;font-size:14px;padding-left:73px;padding-right:73px;margin-bottom:10px;display:inline-block;line-height:40px; text-transform: uppercase;">
                    post your first ad
                  </a>
                </td>
              </tr>

              <tr>
                <td style="border:1px solid #cccccc;border-radius:4px;padding:20px;background-color:#ffffff">
                  <h3 style="margin-top:0">Contact Customer Service</h3>
                  <p>
                    <span style="font-size:14px;width:100%;display:inline-block;margin-bottom:10px">
                      <span
                        style="padding-right:3px;background-image:url('https://ci4.googleusercontent.com/proxy/EzKSpPhxXlw8hQQYWOJBk6hGPkdXmgyEqgBPIiotY-hhMxZ8TTUXw3rccZU_3hd7omFKwzRLo2OmKXRCgUBqRjj7-lT-5UubtwlgcbQkQM6BiM5vwJnDtpKgjn1RFNI3rV6e=s0-d-e1-ft#https://static.viva-images.com/templates/viwii3/images/sprites/global_street.gif');background-position:-582px -684px;height:22px;width:18px;vertical-align:middle;display:inline-block"></span>
                      <span style="line-height:19px">
                  9876006670
                      </span>
                    </span>
                    <span style="font-size:14px;width:100%;display:inline-block">
                      <span
                        style="padding-right:3px;background-image:url('https://ci4.googleusercontent.com/proxy/EzKSpPhxXlw8hQQYWOJBk6hGPkdXmgyEqgBPIiotY-hhMxZ8TTUXw3rccZU_3hd7omFKwzRLo2OmKXRCgUBqRjj7-lT-5UubtwlgcbQkQM6BiM5vwJnDtpKgjn1RFNI3rV6e=s0-d-e1-ft#https://static.viva-images.com/templates/viwii3/images/sprites/global_street.gif');background-position:-582px -521px;height:22px;width:18px;vertical-align:middle;display:inline-block"></span>
                      <span style="line-height:19px">
                        <a style="color:#333333" href="{{url('/')}}">Contact us</a>
                        <span style="font-size:14px;width:100%;display:inline-block;margin-bottom:10px"><br>
                          <span
                            style="padding-right:4px;background-image:url('https://ci6.googleusercontent.com/proxy/tJOoasrhOXiQZGx39nN5iZwrjXHNTmoozHzQg5pQk6rPEdtXZYo-tWGDQv9pIor_mtSFPBFuUnhLP-AIYg4=s0-d-e1-ft#http://email.viva-images.com/logos/faq2.gif');background-position:-1px -683px;height:20px;width:17px;vertical-align:middle;display:inline-block">
                          </span>
                          <span style="line-height:19px;margin-left:2px">
                            <a style="color:#333333" href="{{url('/')}}">Help Centre</a>
                          </span>
                        </span>
                      </span></span>
                  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
        <td></td>
      </tr>
    </tbody>
  </table>