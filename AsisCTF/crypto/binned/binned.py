#!/usr/bin/env python3

from Crypto.Util.number import *
from gensafeprime import *
from flags import Flags

def keygen(nbit):
	p, q = [generate(nbit) for _ in range(2)]
	return (p, q)

def encrypt(m, pubkey):
	return pow(pubkey + 1, m, pubkey ** 3)

def dcrypt(m,pubkey):
	return pow(pubkey -1 , m ,)


p, q = keygen(512)
#n = p * q
n = 125004899806380680278294077957993138206121343727674199724251084023100054797391533591150992663742497532376954423241741439218367086541339504325939051995057848301514908377941815605487168789148131591458301036686411659334843972203243490288676763861925647147178902977362125434420265824374952540259396010995154324589

flag = bytes_to_long(Flags)
enc = encrypt(flag, n)

print(f'pubkey = {n}')
print(f'enc = {enc}')
