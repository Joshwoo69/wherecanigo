import time
import logging
class goto:
	logging.info('test')
	
DV = raw_input('DV? >:')
place = raw_input('Where you wanna go? Specify planet name only! >:')
print('calculating...')
#moho
logging.debug('MOHO(Holioum MELEE CHRISTMAS!)')
LandedMoho = 8390
orbitMoho = 7520
MohoSlingshot = 5110
#Mun
logging.debug('Mun you!')
LandedMun = 5150
orbitMun = 4570
MunSlingshot = 3710
#Kerbin ok
logging.debug('Ker-bin')
LandedKerbin = 0
orbitKerbin = 3400
KEOOrbit = 4515
elliSOIKerbin = 4350
#Minmus ok
logging.debug('MinMax Games (minmus)')
LandedMinmus = 4670
orbitMinmus = 4350
MinmusSlingshot = 3710
#Eeloo ok
logging.debug('ee-loo!')
LandedEeloo = 7480
orbitEeloo = 6860
EelooSlingshot = 5490
#Kerbol (cannot gurantee accurate) ok
logging.debug('OH MY GOSH I AM ON FIRE')
LandedKerbol = 91050
orbitKerbol = 24050
elliSOIKerbol = 10350
#Pe-eve-e ok
logging.debug('Evee~! <3')
Landedeve = 13850
Orbiteve = 5850
elliSOIeve = 4520
eveSlingshot = 4440
#Gilly ok
logging.debug('gill EEEEEEEEEE!!!1')
Landedgilly = 5020
Orbitgilly = 4580
slingshotgilly = 4520
#Duna ok
logging.debug('Dune-Ah!')
LandedDuna = 6540
OrbitDuna = 5090
elliSOIDuna = 4730
SlingshotDuna = 4480
#ike ok
logging.info('ike you little troll! D:')
LandedIke = 5330
OrbitIke = 5150
SlingShotIke = 4760
#jool system ok
logging.info('jool')
LandedJool = 22300
OrbitJool = 8300
elliSOIJool = 5490
#jool (pol)ok
LandedPol = 6600
OrbitPol = 6470
slingshotPol = 5650
#jool (bop)ok
LandedBop = 6830
OrbitBop = 6610
slingshotBop = 5710
#jool (Tylo) ok
logging.info('all dez planerts r urs.. except tylo.. attempt 0 landings ther.')
LandedTylo = 9260
OrbitTylo = 7000
slingshotTylo = 5900
#jool (Vall)ok
LandedVall = 7880
OrbitVall = 7020
slingshotVall = 6110
#jool (laythe)ok
LandedLaythe = 10390
OrbitLaythe = 7490
SlingShotLaythe = 6420
#Dres (<3)ok
LandedDres = 6680
OrbitDres = 6220
slingshotDres = 4930

print('--------------------------------------')
print('NOTE : if number is negative you do not have enough')
logging.debug('fix str and int as python does not like that!')
try:
	DV = int(DV)
except Exception:
	logging.fatal('you inputed some words and python is unable to convert it to numbers! sorry!')
	raw_input('')
print('your location is : ' + place)
print('your DV is : ' + str(DV))
print('--------------------------------------')
if place in ['Dres','dres']:
	print('Landed on Dres: ' + str(DV-LandedDres) )
	print('12K Orbit around Dres: ' + str(DV-OrbitDres) )
	print('1 year 171 Day dres slingshot: ' + str(DV-slingshotDres) )
elif place in ['Laythe','laythe']:
	print('Landed on Laythe: ' + str(DV-Landedlaythe) )
	print('60K Orbit around Laythe: ' + str(DV-Orbitlaythe-DV) )
	print('-NULL- Days Laythe slingshot: ' + str(DV-slingshotlaythe-DV) )
elif place in ['Vall','vall']:
	print('Landed on Vall: ' + str(DV-LandedVall) )
	print('60K Orbit around Vall: ' + str(DV-OrbitVall) )
	print('-NULL- Days Vall slingshot: ' + str(DV-slingshotVall) )
elif place in ['Tylo','tylo']:
	print('Landed on Tylo: ' + str(DV-LandedTylo) )
	print('60K Orbit around Tylo: ' + str(DV-OrbitTylo-DV) )
	print('-NULL- Days Tylo slingshot: ' + str(DV-slingshotTylo-DV) )
elif place in ['bop','Bop']:
	print('Landed on bop: ' + str(DV-LandedBop) )
	print('60K Orbit around bop: ' + str(DV-OrbitBop) )
	print('-NULL- Days bop slingshot: ' + str(DV-slingshotBop) )
elif place in ['Pol','pol']:
	print('Landed on Pol: ' + str(DV-LandedPol) )
	print('60K Orbit around Pol: ' + str(DV-OrbitPol) )
	print('-NULL- Days Pol slingshot: ' + str(DV-slingshotPol) )
elif place in ['Jool','jool']:
	logging.warn('Where can i go application is in beta: one does not simply go to jool.')
	print('Landed on jool: ' + str(DV-LandedJool) )
	print('60K Orbit around jool: ' + str(DV-OrbitJool) )
	print('jool ellipical orbit: ' + str(DV-elliSOIJool) )
elif place in ['bop','Bop']:
	print('Landed on bop: ' + str(DV-Landedbop) )
	print('60K Orbit around bop: ' + str(DV-Orbitbop) )
	print('-NULL- Days bop slingshot: ' + str(DV-slingshotbop) )
elif place in ['mordor','Mordor']:
	logging.fatal('one does not simply walk into mordor.')
elif place in ['skyrim','Skyrim']:
	logging.fatal('Hail summoner, Conjure me up a warm bed now would you?')
	logging.fatal('I used to be a adventurer like you, then I took an arrow to the knee.')
elif place in ['pol','Pol']:
	print('Landed on pol: ' + str(DV-LandedPol) )
	print('60K Orbit around pol: ' + str(DV-OrbitPol) )
	print('-NULL- Days pol slingshot: ' + str(DV-slingshotPol) )
elif place in ['ike','Ike']:
	print('Note: Ike is easy to go to...')
	print('Landed on Ike: ' + str(DV-LandedIke) )
	print('10K Orbit around Ike: ' + str(DV-OrbitIke) )
	print('-NULL- Days Ike slingshot: ' + str(DV-SlingShotIke) )
elif place in ['Duna','duna']:
	print('Landed on Duna: ' + str(DV-LandedDuna) )
	print('60K Orbit around Duna: ' + str(DV-OrbitDuna) )
	print('Duna ellipical orbit to SOI: ' + str(DV-elliSOIDuna) )
	print('300 Days Duna slingshot: ' + str(DV-SlingshotDuna) )
elif place in ['Gilly','gilly']:
	print('Landed on gilly: ' + str(DV-Landedgilly) )
	print('10K Orbit around Ike: ' + str(DV-Orbitgilly) )
	print('-NULL- Days Ike slingshot: ' + str(DV-SlingShotgilly) )
elif place in ['Gilly','gilly']:
	print('Landed on gilly: ' + str(DV-Landedgilly) )
	print('10K Orbit around Ike: ' + str(DV-Orbitgilly) )
	print('-NULL- Days Ike slingshot: ' + str(DV-SlingShotgilly) )
elif place in ['Eve','eve','EVE']:
	print('Landed on Eve: ' + str(DV-Landedeve) )
	print('100K Orbit around Eve: ' + str(DV-Orbiteve) )
	print('Eve ellipical orbit to SOI: ' + str(DV-elliSOIeve) )
	print('168 Days Duna slingshot: ' + str(DV-eveSlingshot) )
elif place in ['Eve','eve','EVE']:
	print('Landed on Eve: ' + str(DV-Landedeve) )
	print('100K Orbit around Eve: ' + str(DV-Orbiteve) )
	print('Eve ellipical orbit to SOI: ' + str(DV-elliSOIeve) )
	print('168 Days Duna slingshot: ' + str(DV-eveSlingshot) )
elif place in ['kerbol','Kerbol','Sun','sun']:
	logging.fatal(' There is no point to land on the sun! but anyways.. here is the numbers:')
	print('---------------------------------------------------------')
	print('"Landed" on sun: ' + str(DV-LandedKerbol) )
	print('10K Orbit around Sun: ' + str(DV-orbitKerbol) )
	print('elliplical sun SOI: ' + str(DV-elliSOIKerbol) )
elif place in ['Eeloo','eeloo','far far away planet']:
	print('Landed on Eeloo: ' + str(DV-LandedEeloo) )
	print('10K Orbit around Eeloo: ' + str(DV-orbitEeloo) )
	print('4 Years,178 Days Eeloo slingshot: ' + str(DV-EelooSlingshot) )
elif place in ['Minmus','minmus','mint']:
	print('Landed on Minmus: ' + str(DV-LandedMinmus) )
	print('10K Orbit around Minmus: ' + str(DV-orbitMinmus) )
	print('56 Hours Minmus slingshot: ' + str(DV-MinmusSlingshot) )
elif place in ['Kerbin','Home','home','kerbin']:
	print('Landed on Kerbin: ' + str(DV-LandedKerbin) )
	print('10K Orbit around Minmus: ' + str(DV-orbitKerbin) )
	print('Kerbin Equalatral orbit (KEO) ' + str(DV-KEOOrbit) )
	print('Kerbin eliiipical orbit to SOI ' + str(DV-elliSOIKerbin) )
elif place in ['Mun','mun','moon','Moon']:
	print('Landed on Mun: ' + str(DV-LandedMun) )
	print('14K Orbit around Mun: ' + str(DV-orbitMun) )
	print('8 Hours Mun slingshot: ' + str(DV-MunSlingshot) )
elif place in ['Moho','moho']:
	print('Landed on Mun: ' + str(DV-LandedMoho) )
	print('14K Orbit around Mun: ' + str(DV-orbitMoho) )
	print('8 Hours Mun slingshot: ' + str(DV-MohoSlingshot) )
else:
	print(place + ' is not a valid location!')

raw_input('')
	
