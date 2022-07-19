import os, html_sanitizer

def getList():
    sanitizer = html_sanitizer.Sanitizer()

    files = os.listdir('d_wlc_en')
    list_wlc_en = ''
    for item in files:
        sub_item=item.rstrip('.jpg')
        item=item
        list_wlc_en = list_wlc_en + '<li><a href="d_wlc_en/{org_name}" target="content_eng">{name}</a></li>'.format(org_name=item, name=sub_item)
    return list_wlc_en
