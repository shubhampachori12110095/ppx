// <auto-generated>
//  automatically generated by the FlatBuffers compiler, do not modify
// </auto-generated>

namespace ppx
{

using global::System;
using global::FlatBuffers;

public struct Run : IFlatbufferObject
{
  private Table __p;
  public ByteBuffer ByteBuffer { get { return __p.bb; } }
  public static Run GetRootAsRun(ByteBuffer _bb) { return GetRootAsRun(_bb, new Run()); }
  public static Run GetRootAsRun(ByteBuffer _bb, Run obj) { return (obj.__assign(_bb.GetInt(_bb.Position) + _bb.Position, _bb)); }
  public void __init(int _i, ByteBuffer _bb) { __p.bb_pos = _i; __p.bb = _bb; }
  public Run __assign(int _i, ByteBuffer _bb) { __init(_i, _bb); return this; }

  public ProtocolTensor? Observation { get { int o = __p.__offset(4); return o != 0 ? (ProtocolTensor?)(new ProtocolTensor()).__assign(__p.__indirect(o + __p.bb_pos), __p.bb) : null; } }

  public static Offset<Run> CreateRun(FlatBufferBuilder builder,
      Offset<ProtocolTensor> observationOffset = default(Offset<ProtocolTensor>)) {
    builder.StartObject(1);
    Run.AddObservation(builder, observationOffset);
    return Run.EndRun(builder);
  }

  public static void StartRun(FlatBufferBuilder builder) { builder.StartObject(1); }
  public static void AddObservation(FlatBufferBuilder builder, Offset<ProtocolTensor> observationOffset) { builder.AddOffset(0, observationOffset.Value, 0); }
  public static Offset<Run> EndRun(FlatBufferBuilder builder) {
    int o = builder.EndObject();
    return new Offset<Run>(o);
  }
};


}
