#Honda
#Kasinski
#Kawasaki
#Ktm
#Suzuki
#Yamaha


# import libraries
import urllib2
from bs4 import BeautifulSoup


# specify the url
quote_page = 'https://www.moto.com.br/Honda/modelos.html'

# query the website and return the html to the variable ‘page’
page = urllib2.urlopen(quote_page)

# parse the html using beautiful soup and store in variable `soup`
soup = BeautifulSoup(page, ‘html.parser’)


# Scrape article main img

articles = soup.find('article');
for article in articles:
    articlefind_all('img', src=True)

links = soup.find('figure').find_all('img', src=True)
for link in links:
    timestamp = time.asctime()
    txt = open('%s.jpg' % timestamp, "wb")
    link = link["src"].split("src=")[-1]
    download_img = urllib2.urlopen(link)
    txt.write(download_img.read())

    txt.close()
