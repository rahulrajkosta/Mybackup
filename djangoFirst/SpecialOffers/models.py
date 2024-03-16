from django.db import models

class SpecialOffer(models.Model):
    title = models.CharField(max_length=50)
    price = models.BigIntegerField()
    discount = models.BigIntegerField()
    img = models.FileField(upload_to="uploads/")
# Create your models here.
