
import os, html_sanitizer

def getList():
    sanitizer = html_sanitizer.Sanitizer()

    files = os.listdir('d_term_en')
    list_term_en = ''
    for item in files:
        sub_item=item.rstrip('.jpg')
        item=item
        list_term_en = list_term_en + '<li><a href="d_term_en/{org_name}" target="content_eng">{name}</a></li>'.format(org_name=item, name=sub_item)
    return list_term_en
