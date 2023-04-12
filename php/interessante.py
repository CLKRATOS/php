import tkinter
from tkinter.import messagebox  

root = tkinter.Tk()
root.withdraw()

count=0

msg_box = messagebox.showwarning(" testando"," 1,2,3")

if msg_box == 'ok':
    msg_box = messagebox.showwarning("sai daqui seboso"," fecha isso")
 
if msg_box =='ok':
    msg_box = messagebox.askquestion("fechou ainda nao?","vai fechar agora?")

while msg_box == 'no':
    count += 1
    msg_box = messagebox.askquestion("fecha agora", "man to te avisando fecha isso ai")
    if(count == 5):
        msg_box = messagebox.showerror("to indo ai!", "fechar esse teu pc seu seboso")
        break
    if msg_box == 'yes':
        msg_box = messagebox.showinfo("nice","boa escola")
    