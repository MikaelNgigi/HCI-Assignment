from subcategory.models import SubCategory


def menu_links(request):
    link = SubCategory.objects.all()
    return dict(link=link)
