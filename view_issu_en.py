
import os, html_sanitizer

def getList():
    sanitizer = html_sanitizer.Sanitizer()

    files = os.listdir('d_issu_en')
    list_issu_en = ''
    for item in files:
        sub_item=item.rstrip('.jpg')
        item=item
        list_issu_en = list_issu_en + '<li><a href="d_issu_en/{org_name}" target="content_eng">{name}</a></li>'.format(org_name=item, name=sub_item)
    return list_issu_en
