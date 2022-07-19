
import os, html_sanitizer

def getList():
    sanitizer = html_sanitizer.Sanitizer()

    files = os.listdir('d_cree_ko')
    list_cree_ko = ''
    for item in files:
        sub_item=item.rstrip('.jpg')
        item=item
        list_cree_ko = list_cree_ko + '<li><a href="d_cree_ko/{org_name}" target="content_ko">{name}</a></li>'.format(org_name=item, name=sub_item)
    return list_cree_ko
