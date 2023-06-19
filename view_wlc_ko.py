
import os, html_sanitizer

def getList():
    sanitizer = html_sanitizer.Sanitizer()

    files = os.listdir('d_wlc_ko')
    list_wlc_ko = ''
    for item in files:
        sub_item=item.rstrip('.jpg')
        item=item
        list_wlc_ko = list_wlc_ko + '<li><a href="d_wlc_ko/{org_name}" target="content_ko">{name}</a></li>'.format(org_name=item, name=sub_item)
    return list_wlc_ko
