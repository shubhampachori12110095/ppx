# automatically generated by the FlatBuffers compiler, do not modify

# namespace: ppx

import flatbuffers

class Categorical(object):
    __slots__ = ['_tab']

    @classmethod
    def GetRootAsCategorical(cls, buf, offset):
        n = flatbuffers.encode.Get(flatbuffers.packer.uoffset, buf, offset)
        x = Categorical()
        x.Init(buf, n + offset)
        return x

    # Categorical
    def Init(self, buf, pos):
        self._tab = flatbuffers.table.Table(buf, pos)

    # Categorical
    def Probs(self):
        o = flatbuffers.number_types.UOffsetTFlags.py_type(self._tab.Offset(4))
        if o != 0:
            x = self._tab.Indirect(o + self._tab.Pos)
            from .ProtocolTensor import ProtocolTensor
            obj = ProtocolTensor()
            obj.Init(self._tab.Bytes, x)
            return obj
        return None

def CategoricalStart(builder): builder.StartObject(1)
def CategoricalAddProbs(builder, probs): builder.PrependUOffsetTRelativeSlot(0, flatbuffers.number_types.UOffsetTFlags.py_type(probs), 0)
def CategoricalEnd(builder): return builder.EndObject()
