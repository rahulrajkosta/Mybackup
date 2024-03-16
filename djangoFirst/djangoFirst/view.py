from django.shortcuts import render
from django.http import HttpResponse
from latestDesigns.models import latestDesigns
from SpecialOffers.models import SpecialOffer
from collectons.models import collecton
def test(request):
    ld=latestDesigns.objects.all().values()
    sl=SpecialOffer.objects.all().values()
    cl=collecton.objects.all().values()
    dta={
        'latestDesigns':ld,
        'SpecialOffers':sl,
        'Collections':cl
    }
    return render(request,"index.html",dta)
def mens(request):
    return render (request,'mens.html')
def womens(request):
    return render(request, 'womens.html')
def contact(request):
    return render(request,'contact.html')
def electronics(request):
    return render(request,'electronics.html')
def checkout(request):
    return render(request,'checkout.html')