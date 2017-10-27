import logging
# Wow well this is code i have written like... years back.
# well here's V2

DV = input('DV? >:')
place = input('Where you wanna go? Specify planet name only! >:')
print('calculating...')
moho = [8390, 7520, 5110]
kerbin = [0, 3400, 4350]
mun = [5150, 4570, 3710]
minmus = [4670, 4350, 3710]
kerbol = [91050, 24050, 10350]
eeloo = [7480, 6860, 5490]
dres = [6680, 6220, 4930]
eve = [13850, 5850, 4440]
gilly = [5020, 4580, 4520]
duna = [6540, 5090, 4480]
ike = [5330, 5150, 4760]
jool = [22300, 8300, 5490]
laythe = [10390, 7490, 6420]
vall = [7880, 7020, 6110]
tylo = [9260, 7000, 5900]
bop = [6830, 6610, 5710]
pol = [6600, 6470, 5650]
print('--------------------------------------')
print('Negative Numbers Means that you do not Have enough Dv To perform!')
logging.debug('fix str and int as python does not like that!')
try:
    DV = int(DV)
except ValueError:
    logging.fatal('DV is not an Integer!')

print('your location is : ' + place)
print('your DV is : ' + str(DV))
print('--------------------------------------')
placeDVs = [0, 0, 0]
localscache = locals().copy()
for name, var in localscache.items():
    if name == place.lower():
        placeDVs = var
print(f"Landed: {int(DV)-placeDVs[0]} || Orbit: {int(DV)-placeDVs[1]} || Slingshot: {int(DV)-placeDVs[2]}")
input()
